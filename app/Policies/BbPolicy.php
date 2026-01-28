<?php

namespace App\Policies;

use App\Models\Bb;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BbPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Проверка: может ли пользователь редактировать объявление
     *
     * @param User $user - Текущий пользователь (автоматически из Auth)
     * @param Bb $bb - Объявление которое пытаются редактировать
     * @return bool - true = можно, false = нельзя
     */
    public function update(User $user, Bb $bb) {
        // Сравниваем ID автора объявления с ID текущего пользователя
        return $user->id === $bb->user_id;
        // Если равны → это его объявление → можно редактировать
    }

    /**
     * Проверка: может ли пользователь удалить объявление
     */
    public function destroy(User $user, Bb $bb) {

        // Используем ту же логику что и для редактирования
        // Если можно редактировать → можно и удалить
        return $this->update($user, $bb);
    }
}
