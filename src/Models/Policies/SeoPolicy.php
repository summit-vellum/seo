<?php

namespace Quill\Seo\Models\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Quill\Seo\Models\Seo;

class SeoPolicy
{

    use HandlesAuthorization;

    protected $module = 'seo';

    /**
     * Determine if the given resource can be viewed by the user.
     *
     * @param  \App\User  $user
     * @param  \Quill\Seo\Models\Seo  $seo
     * @return bool
     */
    public function view(User $user, Seo $seo)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('view');
    }

    /**
     * Determine if the given resource can be updated by the user.
     *
     * @param  \App\User  $user
     * @param  \Quill\Seo\Models\Seo  $seo
     * @return bool
     */
    public function update(User $user, Seo $seo)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('update');
    }

    /**
     * Determine if the user can create a new resource.
     *
     * @param  \App\User  $user
     * @param  \Quill\Seo\Models\Seo  $seo
     * @return bool
     */
    public function create(User $user)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('create');
    }

    /**
     * Determine if the given resource can be deleted by the user.
     *
     * @param  \App\User                $user
     * @param  \Quill\Seo\Models\Seo  $seo
     * @return bool
     */
    public function delete(User $user, Seo $seo)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('delete');
    }

    /**
     * Determine if the given resource can be published by the user.
     *
     * @param  \App\User                $user
     * @param  \Quill\Seo\Models\Seo  $seo
     * @return bool
     */
    public function publish(User $user, Seo $seo)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('publish');
    }

    /**
     * Determine if the given resource is owned by the user.
     *
     * @param  \App\User                $user
     * @param  \Quill\Seo\Models\Seo  $seo
     * @return bool
     */
    public function owned(User $user, Seo $seo)
    {
        return $user->id === $seo->author_id;
    }
}