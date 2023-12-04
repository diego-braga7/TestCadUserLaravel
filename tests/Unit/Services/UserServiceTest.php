<?php
namespace Tests\Unit\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Mockery;
use Tests\TestCase;
use Illuminate\Http\Response;

class UserServiceTest extends TestCase
{

    private function makeUserEntity(): User
    {
        $user = $this->createMock(User::class);
        $user->setAttribute('name', 'test');    
        $user->setAttribute('email', 'test@test.com.br');
        $user->setAttribute('password', '123456');

        return $user;
    }

    private function makeUserRepository() : UserRepository
    {
        $repository = Mockery::mock(UserRepository::class);
        $repository->shouldReceive('delete')->andReturn(true);
        $repository->shouldReceive('findAll')->andReturn([]);
        $repository->shouldReceive('findOne')->andReturn($this->makeUserEntity());
        $repository->shouldReceive('save')->andReturn($this->makeUserEntity());
    
        return $repository;
    }


    /**
     * A test example for the UserService.
     *
     * @return void
     */
    public function testDeleteSuccess()
    {

        $sut = new UserService($this->makeUserRepository());

        $this->assertInstanceOf(UserService::class, $sut);

        $response = $sut->delete(1);

        $this->assertEquals(Response::HTTP_OK, $response->status());
    }

    public function testFindAllSuccess()
    {

        $sut = new UserService($this->makeUserRepository());

        $this->assertInstanceOf(UserService::class, $sut);

        $response = $sut->findAll();

        $this->assertEquals(Response::HTTP_OK, $response->status());
    }

    public function testFindOneSuccess()
    {

        $sut = new UserService($this->makeUserRepository());

        $this->assertInstanceOf(UserService::class, $sut);

        $response = $sut->findOne(1);

        $this->assertTrue($response instanceof JsonResponse);
        $this->assertEquals(Response::HTTP_OK, $response->status());
    }

    public function testSaveSuccess()
    {

        $sut = new UserService($this->makeUserRepository());

        $this->assertInstanceOf(UserService::class, $sut);

        $response = $sut->save([
            'name' => 'test',
            'email' => 'teste@teste',
            'password' => '123456']);
        
        $this->assertTrue($response instanceof JsonResponse);
        $this->assertEquals(Response::HTTP_CREATED, $response->status());
        }

    protected function tearDown(): void
{
    parent::tearDown();
    Mockery::close();
}

}