@props(['active', 'icon', 'link', 'name', 'subName'])

@php
    $classes = $active ?? false ? 'sidebar-item  active' : 'sidebar-item';
@endphp

<li class="sidebar-item has-sub">
    <a href="#" class="sidebar-link">
        <i class="bi bi-stack"></i>
        <span>{{ $name }}</span>
    </a>
    <ul class="submenu">
        <li class="submenu-item">
            <a href="{{ $link }}">{{ $subName }}</a>
        </li>
    </ul>
</li>
