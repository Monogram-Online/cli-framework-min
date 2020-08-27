# cli-framework
*&copy; 2020 Monogram Online*

CLI Framework based on symfony components. This framework provides a
skeleton for developing console based applications.

## Requirements
- PHP 7.x
- Composer
- Symfony basic knowledge

### How to install
1. Clone or download this repository
    ```shell script
    ~$ git clone https://github.com/Monogram-Online/cli-framework.git
    ```
2. Install dependencies
    ```shell script
    ~$ composer install
    ```
3. Create `.env` file or copy/rename `.env.dist`.

4. Check if everything works.
    ```shell script
    ~$ cd cli-framework/
    ~$ php bin/console hello:monogram
    ```

## Developer notes
All new commands are lazy loaded using the 
[Dependency Injection component](https://symfony.com/index.php/doc/current/components/dependency_injection.html). 
To learn how to create a new command check  [Creating a Command](https://symfony.com/index.php/doc/current/console.html#creating-a-command) or
use `HelloMonogramCommand` as starting point.
```php
<?php

namespace Monogram\CLI\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloMonogramCommand extends Command
{
    protected static $defaultName = 'hello:monogram';

    protected function configure()
    {
        $this->setDescription('Command example, outputs "Hello Monogram"');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello Monogram');
        return 0;
    }
}
```

### Further readings
- [The Console Component](https://symfony.com/index.php/doc/current/components/console.html)
- [The DependencyInjection Component](https://symfony.com/index.php/doc/current/components/dependency_injection.html)
- [The Process Component](https://symfony.com/index.php/doc/current/components/process.html)
- [The YAML Component](https://symfony.com/index.php/doc/current/components/yaml.html)
- [Building a Single Command Application](https://symfony.com/index.php/doc/current/components/console/single_command_tool.html)

## *@TODO*

- Event Dispatcher integration.
- Logging
- PhpUnit
- Whatever is needed =)