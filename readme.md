Symfony 4.4 @Security annotation
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

1. Uncomment lines 8-11 from config/packages/framework.yaml
2. run test
3. Observe the test pass

1. Comment back lines 8-11 from config/packages/framework.yaml
2. run test
3. Observe the test fail

Expected result
----------------------

The test must pass for both cases 
