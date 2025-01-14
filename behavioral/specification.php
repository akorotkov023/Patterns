<?php

//interface Specification
//{
//    public function isNormal(Pupil $pupil): bool;
//}
//
//class Pupil
//{
//
//    private int $rate;
//
//    public function getRate(): int
//    {
//        return $this->rate;
//    }
//
//    /**
//     * @param int $rate
//     */
//    public function __construct(int $rate)
//    {
//        $this->rate = $rate;
//    }
//
//    public function setRate(int $rate): void
//    {
//        $this->rate = $rate;
//    }
//}
//
//class PupilSpecification implements Specification
//{
//    private int $needRate;
//
//    /**
//     * @param int $needRate
//     */
//    public function __construct(int $needRate)
//    {
//        $this->needRate = $needRate;
//    }
//
//    public function isNormal(Pupil $pupil): bool
//    {
//        return $this->needRate < $pupil->getRate();
//    }
//}
//
//class AndSpecification implements Specification
//{
//    private array $specification;
//
//    /**
//     * @param array $specification
//     */
//    public function __construct(Specification ...$specification)
//    {
//        $this->specification = $specification;
//    }
//
//    public function isNormal(Pupil $pupil): bool
//    {
//        foreach ($this->specification as $specification) {
//            if (!$specification->isNormal($pupil)) {
//                return false;
//            }
//        }
//        return true;
//    }
//
//    public function getSpecification(): array
//    {
//        return $this->specification;
//    }
//
//
//}
//
//
//class OrSpecification implements Specification
//{
//    private array $specification;
//
//    /**
//     * @param array $specification
//     */
//    public function __construct(Specification ...$specification)
//    {
//        $this->specification = $specification;
//    }
//
//    public function isNormal(Pupil $pupil): bool
//    {
//        foreach ($this->specification as $specification) {
//            if ($specification->isNormal($pupil)) {
//                return true;
//            }
//            return false;
//        }
//    }
//
//    public function getSpecification(): array
//    {
//        return $this->specification;
//    }
//
//}
//
//class NotSpecification implements Specification
//{
//    private Specification $specification;
//
//    /**
//     * @param Specification $specification
//     */
//    public function __construct(Specification $specification)
//    {
//        $this->specification = $specification;
//    }
//
//
//    public function isNormal(Pupil $pupil): bool
//    {
//        return !$this->specification->isNormal($pupil);
//    }
//
//}
//
//$spec1 = new PupilSpecification(5);
//$spec2 = new PupilSpecification(10);
//
//$pupil = new Pupil(4);

//var_export($spec1->isNormal($pupil));
//var_export($spec2->isNormal($pupil));

//$andSpecification = new AndSpecification($spec1, $spec2);
//
//var_export($andSpecification->isNormal($pupil));


//$orSpecification = new OrSpecification($spec1, $spec2);
//
//var_export($orSpecification->isNormal($pupil));

//
//$notSpecification = new NotSpecification($spec1);
//
//var_export($notSpecification->isNormal($pupil));
