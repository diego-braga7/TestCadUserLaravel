<?php
namespace Tests\Unit\Services;


use App\Repositories\Abstracts\AbstractRepository;
use App\Repositories\Contracts\InterfaceRepository;
use App\Repositories\UserRepository;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use PHPUnit\Framework\TestCase;

class UserServiceTest extends TestCase
{

    private function makeUserRepository() : UserRepository
    {
        $repository = $this->createStub(UserRepository::class);
        $repository->method('delete')->willReturn(true);
        return $repository;
    }

    /**
     * A test example for the UserService.
     *
     * @return void
     */
    public function test_example()
    {
        $repository = new UserRepository();

        $userService = new UserService($repository);

        $this->assertInstanceOf(UserService::class, $userService);

        // $response = $userService->delete(1);

        // $this->assertEquals(200, $response->status());
    }
}