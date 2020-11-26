<?php

namespace Edupham\Api\App\Repositories;

use Edupham\Api\App\Models\User;

class UserRepository extends BaseRepository
{
    protected  $book;

    /**
     * BookRepository constructor.
     * @param User $book
     */
    public function __construct(User $book)
    {
        parent::__construct();
        $this->book = $book;
    }

    /**
     * Lấy danh sách Book theo phân trang
     *
     * @param int $pageSize
     * @return mixed
     */
    public function paginate($pageSize = 10)
    {
        return User::paginate($pageSize);
    }

    /**
     * Lấy thông tin Book theo ID của nó
     *
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return User::find($id);
    }

    /**
     * Xử lý lưu thông tin User
     *
     * @param $data
     * @return bool
     */
    public function store($data)
    {
        if (User::create($data)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Xử lý cập nhật thông tin User
     *
     * @param $id
     * @param $data
     * @return bool
     */
    public function update($id, $data)
    {
        $book = User::find($id);

        if ($book->update($data)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Xử lý xóa thông tin User
     *
     * @param $id
     * @return bool
     */
    public function destroy($id)
    {
        $book = User::find($id);

        if ($book->destroy($id)) {
            return true;
        } else {
            return false;
        }
    }
}