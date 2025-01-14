<?php

//interface PriceCalculatorInterface
//{
//    public function calculate(ProductData $productData): float;
//}
//
//class CalculatePriceRequestHandler
//{
//    private PriceCalculatorInterface $priceCalculator;
//
//    public function __construct(PriceCalculatorInterface $priceCalculator)
//    {
//        $this->priceCalculator = $priceCalculator;
//    }
//
//    public function handle(CalculatePriceRequest $request): array
//    {
//        $productDataRequest = new ProductData(
//            $request->product,
//            $request->taxNumber,
//            $request->couponCode
//        );
//
//        $price = $this->priceCalculator->calculate($productDataRequest);
//        return ['price' => $price];
//    }
//}
//
//class PurchaseRequestHandler
//{
//    private PriceCalculatorInterface $priceCalculator;
//    private PurchaseService $purchaseService;
//
//    public function __construct(PriceCalculatorInterface $priceCalculator, PurchaseService $purchaseService)
//    {
//        $this->priceCalculator = $priceCalculator;
//        $this->purchaseService = $purchaseService;
//    }
//
//    public function handle(PurchaseRequest $request): array
//    {
//        $productDataRequest = new ProductData(
//            $request->product,
//            $request->taxNumber,
//            $request->couponCode,
//            $request->paymentProcessor ?? null
//        );
//
//        $price = $this->priceCalculator->calculate($productDataRequest);
//        $defineProcessor = DefinerProcessor::define($productDataRequest->getPaymentProcessor());
//        $this->purchaseService->setProcessor($defineProcessor);
//
//        $result = $this->purchaseService->purchase($price);
//        return ['result' => $result];
//    }
//}
//
//// Основной класс для обработки запросов
//class RequestHandler
//{
//    private CalculatePriceRequestHandler $calculatePriceHandler;
//    private PurchaseRequestHandler $purchaseHandler;
//
//    public function __construct(CalculatePriceRequestHandler $calculatePriceHandler, PurchaseRequestHandler $purchaseHandler)
//    {
//        $this->calculatePriceHandler = $calculatePriceHandler;
//        $this->purchaseHandler = $purchaseHandler;
//    }
//
//    public function handle($request): array
//    {
//        if ($request instanceof CalculatePriceRequest) {
//            return $this->calculatePriceHandler->handle($request);
//        } elseif ($request instanceof PurchaseRequest) {
//            return $this->purchaseHandler->handle($request);
//        } else {
//            throw new InvalidArgumentException('Unsupported request type');
//        }
//    }
//}
