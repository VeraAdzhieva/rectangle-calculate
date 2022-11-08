<?php

declare(strict_types = 1);

namespace VeraAdzhieva\RectangleCalculate;

class RectangleCalculate
{
    /*
     * Расчет периметра прямоугольника.
     *
     * @param int $a Длина.
     * @param int $b Ширина.
     *
     * @return int Периметр прямоугольника.
     */
    public function getPerimeter(int $a, int $b): int
    {
        return 2*($a + $b);
    }

    /*
     * Расчет площади прямоугольника.
     *
     * @param int $a Длина.
     * @param int $b Ширина.
     *
     * @return int Площадь прямоугольника.
     */
    public function getSquare(int $a, int $b): int
    {
        return $a*$b;
    }

    /*
     * Расчет диагонали прямоугольника.
     *
     * @param int $a Длина.
     * @param int $b Ширина.
     *
     * @return int Диагональ прямоугольника.
     */
    public function getDiagonal(int $a, int $b): float
    {
        return sqrt(pow($a, 2) + pow($b, 2));
    }
}