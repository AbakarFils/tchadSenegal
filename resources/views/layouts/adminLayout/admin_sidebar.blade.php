<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Slider</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/slider/create') }}">Ajouter Slider</a></li>
        <li><a href="{{route('slider.index')}}">listes des Sliders</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Pièces</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/piece/create') }}">Ajouter Pièces</a></li>
        <li><a href="{{route('piece.index')}}">Lister les Pièces</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Formalites</span> <span class="label label-important">3</span></a>
      <ul>
          <li><a href="{{ url('/admin/formalite/create') }}">Ajouter une Formalite</a></li>
          <li><a href="{{route('formalite.index')}}">Lister les Formalites</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Contacts</span></a></li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Reservations</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Tourisme et culture</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Ajouter un lieu Touristique</a></li>
        <li><a href="gallery.html">liste des lieux touristique</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Citoyens</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="{{ url('/admin/citoyen/create') }}">Ajouter un Citoyen</a></li>
        <li><a href="{{route('citoyen.index')}}">Listes des Citoyens</a></li>
      </ul>
    </li>
  </ul>
</div>
<!--sidebar-menu-->