<?php
		$images = json_decode(str_replace('\\', '', $data['images']));
		for($i=1; $i<=count($data['teams']['name']); $i++ )