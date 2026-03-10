<?php

declare(strict_types=1);

namespace Configs;

use InvalidArgumentException;
use MaplePHP\Emitron\AbstractConfigProps;

/**
 * Defines the set of allowed configuration properties and CLI arguments.
 *
 * CLI arguments with matching property names will override configuration file values.
 *
 * Note:
 * - All properties are nullable, indicating they have not been explicitly set.
 * - Null values allow the system to distinguish between "not provided" and "intentionally set".
 * - Do not use array values or multiple data types
 */
class CliOptions extends AbstractConfigProps
{
    public ?string $timezone = null;
    public ?string $locale = null;
    public ?string $type = null;
    public ?int $exitCode = null;
    public ?bool $verbose = null;

    /**
     * Hydrate the properties/object with expected data, and handle unexpected data
     *
     * @param string|bool $key
     * @param mixed $value
     * @return void
     */
    protected function propsHydration(string|bool $key, mixed $value): void
    {
        switch ($key) {
            case 'type':
                $this->type = (!is_string($value) || $value === '') ? null : $value;
				$this->setPropDesc($key, "Lorem ipsum dolor type.");
                break;
            case 'timezone':
                // The default timezone is 'CET'
                $this->timezone = (!is_string($value) || $value === '') ? 'Europe/Stockholm' : $value;
	            $this->setPropDesc($key, "Lorem ipsum dolor timezone.");
                break;
            case 'locale':
                // The default timezone is 'CET'
                $this->locale = (!is_string($value) || $value === '') ? 'en_US' : $value;
	            $this->setPropDesc($key, "Lorem ipsum dolor locale.");
                if(!$this->isValidLocale($this->locale)) {
                    throw new InvalidArgumentException(
                        "Invalid locale '{$this->locale}'. Expected format like 'en_US' (language_COUNTRY)."
                    );
                }
                break;
            case 'exitCode':
                $this->exitCode = ($value === null) ? null : (int)$value;
	            $this->setPropDesc($key, "Lorem ipsum dolor exitCode.");
                break;
            case 'verbose':
                $this->verbose = $this->dataToBool($value);
	            $this->setPropDesc($key, "Lorem ipsum dolor verbose.");
                break;
        }
    }

}
