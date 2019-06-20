<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="header">АДМИНИСТРИРОВАНИЕ</li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i> <span>Страницы</span></a></li>
<li><a href='{{ backpack_url('tag') }}'><i class='fa fa-tag'></i> <span>Tags</span></a></li>
<li class="treeview">
    <a href="#"><i class="fa fa-user-plus"></i> <span>Пользователи</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Пользователи</span></a></li>
      <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Роли</span></a></li>
      <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Разрешения</span></a></li>
    </ul>
</li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/log') }}'><i class='fa fa-terminal'></i> <span>Логи</span></a></li>
<li class="treeview">
  <a href="#"><i class="fa fa-globe"></i> <span>Translations</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li>
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
  </ul>
</li>

<li class="header">ПОЛЬЗОВАТЕЛИ</li>
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li class="treeview">
    <a href="#"><i class="fa fa-user-plus"></i> <span>УЦН</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li class="treeview">
            <a href="#"><i class="fa fa-user-plus"></i> <span>Подрядчик</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Бурение</span></a></li>
              <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Архив</span></a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-user-plus"></i> <span>Заказчик</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Бурение</span></a></li>
              <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Архив</span></a></li>
            </ul>
        </li>
    </ul>
</li>
<li class="treeview">
    <a href="#"><i class="fa fa-user-plus"></i> <span>ГНБ</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Бурение</span></a></li>
      <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Архив</span></a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#"><i class="fa fa-user-plus"></i> <span>Платежи</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Платежи</span></a></li>
      <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Архив</span></a></li>
    </ul>
</li>