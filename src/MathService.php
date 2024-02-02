<?php

declare(strict_types=1);

namespace Hennest\Math;

use Brick\Math\BigDecimal;
use Brick\Math\Exception\MathException;
use Brick\Math\Exception\RoundingNecessaryException;
use Brick\Math\RoundingMode;
use Hennest\Math\Contracts\MathServiceInterface;

final readonly class MathService implements MathServiceInterface
{
    public function __construct(
        private int $scale
    ) {
    }

    /**
     * @throws MathException
     * @throws RoundingNecessaryException
     */
    public function add(float|int|string $first, float|int|string $second, ?int $scale = null): string
    {
        return (string) BigDecimal::of($first)
            ->plus(BigDecimal::of($second))
            ->toScale(
                scale: $scale ?? $this->scale,
                roundingMode: RoundingMode::DOWN
            );
    }

    /**
     * @throws MathException
     * @throws RoundingNecessaryException
     */
    public function subtract(float|int|string $first, float|int|string $second, ?int $scale = null): string
    {
        return (string) BigDecimal::of($first)
            ->minus(BigDecimal::of($second))
            ->toScale(
                scale: $scale ?? $this->scale,
                roundingMode: RoundingMode::DOWN
            );
    }

    /**
     * @throws MathException
     */
    public function divide(float|int|string $first, float|int|string $second, ?int $scale = null): string
    {
        return (string) BigDecimal::of($first)
            ->dividedBy(
                that: BigDecimal::of($second),
                scale: $scale ?? $this->scale,
                roundingMode: RoundingMode::DOWN
            );
    }

    /**
     * @throws MathException
     * @throws RoundingNecessaryException
     */
    public function multiply(float|int|string $first, float|int|string $second, ?int $scale = null): string
    {
        return (string) BigDecimal::of($first)
            ->multipliedBy(BigDecimal::of($second))
            ->toScale(
                scale: $scale ?? $this->scale,
                roundingMode: RoundingMode::DOWN
            );
    }

    /**
     * @throws MathException
     * @throws RoundingNecessaryException
     */
    public function powerOf(float|int|string $first, float|int|string $second, ?int $scale = null): string
    {
        return (string) BigDecimal::of($first)
            ->power((int) $second)
            ->toScale(
                scale: $scale ?? $this->scale,
                roundingMode: RoundingMode::DOWN
            );
    }

    /**
     * @throws MathException
     * @throws RoundingNecessaryException
     */
    public function powerOfTen(float|int|string $number): string
    {
        return $this->powerOf(
            first: 10,
            second: $number
        );
    }

    /**
     * @throws MathException
     */
    public function ceil(float|int|string $number): string
    {
        return (string) BigDecimal::of($number)
            ->dividedBy(
                that: BigDecimal::one(),
                scale: 0,
                roundingMode: RoundingMode::CEILING
            );
    }

    /**
     * @throws MathException
     */
    public function floor(float|int|string $number): string
    {
        return (string) BigDecimal::of($number)
            ->dividedBy(
                that: BigDecimal::one(),
                scale: 0,
                roundingMode: RoundingMode::FLOOR
            );
    }

    /**
     * @throws MathException
     */
    public function round(float|int|string $number, int $precision = 0): string
    {
        return (string) BigDecimal::of($number)
            ->dividedBy(
                that: BigDecimal::one(),
                scale: $precision,
                roundingMode: RoundingMode::HALF_UP
            );
    }

    /**
     * @throws MathException
     */
    public function absolute(float|int|string $number): string
    {
        return (string) BigDecimal::of($number)->abs();
    }

    /**
     * @throws MathException
     */
    public function negate(float|int|string $number): string
    {
        return (string) BigDecimal::of($number)->negated();
    }

    /**
     * @throws MathException
     */
    public function compare(float|int|string $first, float|int|string $second): int
    {
        return BigDecimal::of($first)->compareTo(BigDecimal::of($second));
    }
}
