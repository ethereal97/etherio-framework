<?php

namespace Ethereal\Foundation;

class Configuration
{

    public function get(string $name, $default = null)
    {
	$keywords = explode('.', $name);
	
	$result = null;
	
	array_map(function ($name) use (&$result) {
	    if (! is_array($result)) {
	    	return $result = $this->configs[$name];
	    }

	    return $result = $result[$name] ?? null;
	}, $keywords);

        return $result ?: $default;
    }


}
