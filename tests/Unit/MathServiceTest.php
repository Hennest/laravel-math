<?php

declare(strict_types=1);

use Hennest\Math\Contracts\MathServiceInterface;

beforeEach(function (): void {
    $this->math = app(MathServiceInterface::class);
});

it('can add', function (): void {
    expect($this->math->add(3, 2))->toEqual('5.00');
});

it('can subtract', function (): void {
    expect($this->math->subtract(3, 2))->toEqual('1.00');
});

it('can divide', function (): void {
    expect($this->math->divide(4, 2))->toEqual('2.00');
});

it('can multiply', function (): void {
    expect($this->math->multiply(3, 2))->toEqual('6.00');
});

it('can raise value to power of', function (): void {
    expect($this->math->powerOf(3, 2))->toEqual('9.00');
});

it('can raise to power of 10', function (): void {
    expect($this->math->powerOfTen(2))->toEqual('100.00');
});

it('can round up', function (): void {
    expect($this->math->ceil(3.25))->toEqual('4');
});

it('can round down', function (): void {
    expect($this->math->floor(3.25))->toEqual('3');
});

it('can round', function (): void {
    expect($this->math->round(3.25, 1))->toEqual('3.3');
});

it('can be absolute', function (): void {
    expect($this->math->absolute(-3))->toEqual('3');
});

it('can negate', function (): void {
    expect($this->math->negate(3))->toEqual('-3');
});

it('can compare that first number is greater', function (): void {
    expect($this->math->compare(3, 2))->toEqual(MathServiceInterface::FIRST_NUMBER_IS_GREATER);
});

it('can compare that two numbers are equal', function (): void {
    expect($this->math->compare(3, 3))->toEqual(MathServiceInterface::THEY_ARE_EQUAL);
});

it('can compare that first number is lesser', function (): void {
    expect($this->math->compare(2, 3))->toEqual(MathServiceInterface::FIRST_NUMBER_IS_LESSER);
});

it('can compare that the first number is equal to the second number', function (): void {
    expect($this->math->equals(3, 3))->toBeTrue();
});

it('can compare that the first number is greater than the second number', function (): void {
    expect($this->math->greaterThan(3, 2))->toBeTrue();
});

it('can compare that the first number is less than the second number', function (): void {
    expect($this->math->lessThan(2, 3))->toBeTrue();
});

it('can compare that the first number is greater than or equal to the second number', function (): void {
    expect($this->math->greaterThanOrEqual(3, 3))
        ->toBeTrue()
        ->and($this->math->greaterThanOrEqual(3, 2))
        ->toBeTrue();
});

it('can compare that the first number is lesser than or equal to the second number', function (): void {
    expect($this->math->lessThanOrEqual(2, 3))
        ->toBeTrue()
        ->and($this->math->lessThanOrEqual(2, 2))
        ->toBeTrue();
});
