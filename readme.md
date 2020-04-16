Upgrade to symfony 5 broke multiple roles from security.yaml
=================================

Getting started 
----------------

1. clone 
2. run composer install
3. run test
```
bin/phpunit
```

Steps to reproduce
-------------------

1. Revert to commit 92ce15b
2. run test
3. Observe the test pass

1. Upgrade symfony 5
2. run test
3. Observe the test fail with compilation error
```

[critical] Uncaught PHP Exception Symfony\Component\Security\Core\Exception\InvalidArgumentException: 
"Passing more than one Security attribute to "Symfony\Component\Security\Core\Authorization\AccessDecisionManager::decide()" 
is not supported." at /home/cxdev/sources/symfony4.4/vendor/symfony/security-core/Authorization/AccessDecisionManager.php line 67

```

Expected result
----------------------

The test must pass after upgrade to symfony 5 
