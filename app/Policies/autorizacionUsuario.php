<?php

namespace App\Policies;

use App\User;
Use App\Rol;
use Illuminate\Auth\Access\HandlesAuthorization;

class autorizacionUsuario
{
    use HandlesAuthorization;

    public function view(User $user, post $post)
      {
          //
      }

      /**
       * Determine whether the user can create posts.
       *
       * @param  \App\User  $user
       * @return mixed
       */
      public function create(User $user)
      {
          //
      }

      /**
       * Determine whether the user can update the post.
       *
       * @param  \App\User  $user
       * @param  \App\post  $post
       * @return mixed
       */
      public function update(User $user, post $post)
      {
            return $user->id == $post->id_user;
      }

      public function owner(User $user)
      {
        return $user->name == 'Cesar Machorro';
      }

      /**
       * Determine whether the user can delete the post.
       *
       * @param  \App\User  $user
       * @param  \App\post  $post
       * @return mixed
       */
      public function delete(User $user, post $post)
      {
          //
      }
}
