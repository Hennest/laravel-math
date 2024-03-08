<?php

declare(strict_types=1);

namespace Hennest\Math\Contracts;

use Brick\Math\Exception\MathException;
use Brick\Math\Exception\RoundingNecessaryException;

interface MathServiceInterface
{
    public const FIRST_NUMBER_IS_LESSER = -1;

    public const THEY_ARE_EQUAL = 0;

    public const FIRST_NUMBER_IS_GREATER = 1;

    /**
     * Adds two numbers and returns the result as a string.
     *
     * @param float|int|string $first The first number.
     * @param float|int|string $second The second number.
     * @param int|null $scale (Optional) The scale for the result. If not provided, the default scale is used.
     *
     * @return string The result of the addition operation.
     *
     * @throws MathException
     * @throws RoundingNecessaryException
     */
    public function add(float|int|string $first, float|int|string $second, ?int $scale = null): string;


    /**
     * Subtracts two numbers and returns the result as a string.
     *
     * @param float|int|string $first The first number.
     * @param float|int|string $second The second number.
     * @param int|null $scale (Optional) The scale for the result. If not provided, the default scale is used.
     *
     * @return string The result of the subtraction operation.
     *
     * @throws MathException
     * @throws RoundingNecessaryException
     */
    public function subtract(float|int|string $first, float|int|string $second, ?int $scale = null): string;

    /**
     * Divides two numbers and returns the result as a string.
     *
     * @param float|int|string $first The dividend.
     * @param float|int|string $second The divisor.
     * @param int|null $scale (Optional) The scale for the result. If not provided, the default scale is used.
     *
     * @return string The result of the division operation.
     *
     * @throws MathException
     */
    public function divide(float|int|string $first, float|int|string $second, ?int $scale = null): string;

    /**
     * Multiplies two numbers and returns the result as a string.
     *
     * @param float|int|string $first The first factor.
     * @param float|int|string $second The second factor.
     * @param int|null $scale (Optional) The scale for the result. If not provided, the default scale is used.
     *
     * @return string The result of the multiplication operation.
     *
     * @throws MathException
     * @throws RoundingNecessaryException
     */
    public function multiply(float|int|string $first, float|int|string $second, ?int $scale = null): string;

    /**
     * Raises a number to the power of another and returns the result as a string.
     *
     * @param float|int|string $first The base.
     * @param float|int|string $second The exponent.
     * @param int|null $scale (Optional) The scale for the result. If not provided, the default scale is used.
     *
     * @return string The result of the power operation.
     *
     * @throws MathException
     * @throws RoundingNecessaryException
     */
    public function powerOf(float|int|string $first, float|int|string $second, ?int $scale = null): string;

    /**
     * Raises 10 to the power of a given number and returns the result as a string.
     *
     * @param float|int|string $number The exponent.
     *
     * @return string The result of 10 to the power of the given number.
     *
     * @throws MathException
     * @throws RoundingNecessaryException
     */
    public function powerOfTen(float|int|string $number): string;

    /**
     * Rounds a number to the nearest integer greater than or equal to it and returns the result as a string.
     *
     * @param float|int|string $number The number to round.
     *
     * @return string The result of rounding up the given number.
     *
     * @throws MathException
     */
    public function ceil(float|int|string $number): string;

    /**
     * Rounds a number to the nearest integer less than or equal to it and returns the result as a string.
     *
     * @param float|int|string $number The number to round.
     *
     * @return string The result of rounding down the given number.
     *
     * @throws MathException
     */
    public function floor(float|int|string $number): string;

    /**
     * Rounds a number to a specified precision and returns the result as a string.
     *
     * @param float|int|string $number The number to round.
     * @param int $precision The number of decimal places to round to.
     *
     * @return string The result of rounding the given number.
     *
     * @throws MathException
     */
    public function round(float|int|string $number, int $precision = 0): string;

    /**
     * Returns the absolute value of a number as a string.
     *
     * @param float|int|string $number The number to find the absolute value of.
     *
     * @return string The absolute value of the given number.
     *
     * @throws MathException
     */
    public function absolute(float|int|string $number): string;

    /**
     * Negates a number and returns the result as a string.
     *
     * @param float|int|string $number The number to negate.
     *
     * @return string The negation of the given number.
     *
     * @throws MathException
     */
    public function negate(float|int|string $number): string;

    /**
     * Compares two numbers and returns an integer representing their relationship.
     *
     * @param float|int|string $first The first number.
     * @param float|int|string $second The second number.
     *
     * @return int -1 if $first is less than $second, 0 if they are equal, and 1 if $first is greater than $second.
     *
     * @throws MathException
     */
    public function compare(float|int|string $first, float|int|string $second): int;

    /**
     * Checks if two numbers are equal.
     *
     * @param float|int|string $first The first number.
     * @param float|int|string $second The second number.
     *
     * @return bool True if the numbers are equal, false otherwise.
     *
     * @throws MathException
     */
    public function equals(float|int|string $first, float|int|string $second): bool;

    /**
     * Checks if the first number is greater than the second number.
     *
     * @param float|int|string $first The first number.
     * @param float|int|string $second The second number.
     *
     * @return bool True if the first number is greater than the second number, false otherwise.
     *
     * @throws MathException
     */
    public function greaterThan(float|int|string $first, float|int|string $second): bool;

    /**
     * Checks if the first number is less than the second number.
     *
     * @param float|int|string $first The first number.
     * @param float|int|string $second The second number.
     *
     * @return bool True if the first number is less than the second number, false otherwise.
     *
     * @throws MathException
     */
    public function lessThan(float|int|string $first, float|int|string $second): bool;

    /**
     * Checks if the first number is greater than or equal to the second number.
     *
     * @param float|int|string $first The first number.
     * @param float|int|string $second The second number.
     *
     * @return bool True if the first number is greater than or equal to the second number, false otherwise.
     *
     * @throws MathException
     */
    public function greaterThanOrEqual(float|int|string $first, float|int|string $second): bool;

    /**
     * Checks if the first number is less than or equal to the second number.
     *
     * @param float|int|string $first The first number.
     * @param float|int|string $second The second number.
     *
     * @return bool True if the first number is less than or equal to the second number, false otherwise.
     *
     * @throws MathException
     */
    public function lessThanOrEqual(float|int|string $first, float|int|string $second): bool;
}
