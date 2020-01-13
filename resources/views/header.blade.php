
    <div class="nav-wrap">
        <ul class="nav-left">
          <?php
            $user_id = Session::get('user_id');
            $user_role = \App\User::where('id','=',$user_id)->first()->user_role;
            $role = array();
            if($user_role != 'super_admin')
            {
              $user_role = explode(',',$user_role);
              for($i=0;$i<sizeof($user_role);$i++)
              {
                  echo '
                <li class="desktop-toggle">
                    <a href="'.$user_role[$i].'">
                      '.ucfirst($user_role[$i]).'
                    </a>
                </li>


                  ';
              }
            }
            ?>


        </ul>

    </div>





