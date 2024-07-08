<?php

namespace App\FirstTask;

class User {

    private ?string $firstName = null;
    private ?string $lastName = null;
    private ?string $email = null;

    public function __toString(): string
    {
        $string = '';
        $string .= $this->firstName ? $this->firstName : '';
        $string .= $this->lastName ? ' ' . $this->lastName : '';
        $string .= $this->email ? ' <' . $this->email . '>' : '';
        // Or
        //$string = sprintf("%s %s <%s>", $this->firstName, $this->lastName,$this->email);
        return $string;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

}
