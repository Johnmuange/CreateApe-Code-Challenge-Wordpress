<?php

namespace Staatic\Vendor\Symfony\Contracts\Service;

use ReflectionClass;
use LogicException;
use ReflectionNamedType;
use Staatic\Vendor\Psr\Container\ContainerInterface;
use Staatic\Vendor\Symfony\Contracts\Service\Attribute\SubscribedService;
trait ServiceSubscriberTrait
{
    protected $container;
    public static function getSubscribedServices() : array
    {
        $services = \method_exists(\get_parent_class(self::class) ?: '', __FUNCTION__) ? parent::getSubscribedServices() : [];
        foreach ((new ReflectionClass(self::class))->getMethods() as $method) {
            if (self::class !== $method->getDeclaringClass()->name) {
                continue;
            }
            if (!($attribute = (method_exists($method, 'getAttributes') ? $method->getAttributes(SubscribedService::class) : [])[0] ?? null)) {
                continue;
            }
            if ($method->isStatic() || $method->isAbstract() || $method->isGenerator() || $method->isInternal() || $method->getNumberOfRequiredParameters()) {
                throw new LogicException(\sprintf('Cannot use "%s" on method "%s::%s()" (can only be used on non-static, non-abstract methods with no parameters).', SubscribedService::class, self::class, $method->name));
            }
            if (!($returnType = $method->getReturnType())) {
                throw new LogicException(\sprintf('Cannot use "%s" on methods without a return type in "%s::%s()".', SubscribedService::class, $method->name, self::class));
            }
            $serviceId = $returnType instanceof ReflectionNamedType ? $returnType->getName() : (string) $returnType;
            if ($returnType->allowsNull()) {
                $serviceId = '?' . $serviceId;
            }
            $services[$attribute->newInstance()->key ?? self::class . '::' . $method->name] = $serviceId;
        }
        return $services;
    }
    /**
     * @param ContainerInterface $container
     * @return ContainerInterface|null
     */
    public function setContainer($container)
    {
        $this->container = $container;
        if (\method_exists(\get_parent_class(self::class) ?: '', __FUNCTION__)) {
            return parent::setContainer($container);
        }
        return null;
    }
}
