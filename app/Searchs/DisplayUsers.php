<?php
namespace App\Searchs;
use App\Models\Users\User;
// 改修課題：選択科目の検索機能
interface DisplayUsers{
public function resultUsers($keyword, $category, $updown, $gender, $role, $subjects);
}
