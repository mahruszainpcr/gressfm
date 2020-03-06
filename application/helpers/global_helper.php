<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('dj').'"><i class="fa fa-list fa-fw"></i> Dj</a>
	</li><li>
		<a href="'.site_url('event').'"><i class="fa fa-list fa-fw"></i> Event</a>
	</li><li>
		<a href="'.site_url('galeri').'"><i class="fa fa-list fa-fw"></i> Galeri</a>
	</li><li>
		<a href="'.site_url('news').'"><i class="fa fa-list fa-fw"></i> News</a>
	</li><li>
		<a href="'.site_url('profil').'"><i class="fa fa-list fa-fw"></i> Profil</a>
	</li><li>
		<a href="'.site_url('show_list').'"><i class="fa fa-list fa-fw"></i> Show list</a>
	</li><li>
		<a href="'.site_url('user').'"><i class="fa fa-list fa-fw"></i> User</a>
	</li>';
	}
