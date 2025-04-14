<?php

// use Exception;
// use ReflectionProperty;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class NotBlank {}

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class Length
{

    public int $min;

    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}
class LoginRequest
{
    #[NotBlank]
    #[Length(min: 4, max: 10)]
    var string $username;

    #[NotBlank]
    #[Length(min: 8, max: 10)]
    var string $password;
}

// membaca attribute


function validateNotBlank(ReflectionProperty $property, object $object): void
{


    $attributes = $property->getAttributes(NotBlank::class);
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object)) {
            throw new Exception("property $property->name is null");
        }

        if ($property->getValue($object) == null) {
            throw new Exception("Property $property->name is null");
        }
    }
}


function validate(object $object): void
{

    $class = new ReflectionClass(($object));

    $properties =  $class->getProperties();

    foreach ($properties as $property) {

        try {
            validateNotBlank($property, $object);
        } catch (Exception $exception) {
            echo "error {$exception->getMessage()}";
        }
    }
}

function validateLength(ReflectionProperty $property, object $object)
{

    if (!$property->isInitialized($object) || $property->getValue($object) == null) {
        return; // batalkan validasi
    }

    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);

    foreach ($attributes as $attribute) {
        $length = $attribute->newInstance();

        if (strlen($value) < $length->min) {
            throw new Exception("Property {$property->name}
            size is too short");
        }

        if (strlen($value) > $length->max) {
            throw new Exception("Property {$property->name}
            size is top long");
        }
    }
}
$user = new LoginRequest();
$user->username = "halo";
$user->password = "123uejkedmemeke";
validate($user);