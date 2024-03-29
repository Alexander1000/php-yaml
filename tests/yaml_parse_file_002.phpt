--TEST--
yaml_parse_file - error cases
--SKIPIF--
<?php if(!extension_loaded('yaml')) die('skip yaml n/a'); ?>
--INI--
yaml.decode_timestamp=1
date.timezone=GMT
--FILE--
<?php
yaml_parse_file(NULL);
yaml_parse_file('');
yaml_parse_file('invalid');
yaml_parse_file();
--EXPECTF--
Warning: yaml_parse_file(): Filename cannot be empty in %s on line %d

Warning: yaml_parse_file(): Filename cannot be empty in %s on line %d

Warning: yaml_parse_file(invalid): failed to open stream: No such file or directory in %s on line %d

Warning: yaml_parse_file() expects at least 1 parameter, 0 given in %s on line %d
