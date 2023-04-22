<?php
namespace ProgrammerZamanNow\Belajar\PHP\MVC;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class LoggingTest extends TestCase
{
public function testLogging(){
    $logger = new Logger(HandlerTest::class);
    $logger->pushHandler((new StreamHandler("php://stderr")));
    $logger->pushHandler((new StreamHandler(__DIR__ /"/../application.log")));

    $logger->info("Belajar pemrograman php logging");
    $logger->info("Selamat datang di programmer akhir zaman");
    $logger->info("ini informasi aplikasi logging");

    self::assertNotNull($logger);
}
}