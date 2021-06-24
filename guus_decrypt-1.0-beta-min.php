<!--
  -- Guusnara Custom Decrypt v1.0
  -- http://guusnara.com/
  --
  -- Copyright 2013 Guusnara
  --
  -- Date: 2013-09-19T01:25Z
  --
  -- DON'T EDIT THIS SCRIPT!
-->
<?php function guus_decrypt($password){$guus_input=@$password;$guus_totals=strlen($guus_input);$guus_ceiling=ceil($guus_totals/2);$guus_setting_part1=substr($guus_input,0,$guus_ceiling);$guus_setting_part2=substr($guus_input,$guus_ceiling,$guus_totals-$guus_ceiling);$guus_output=md5(md5(strtolower(base64_encode(sha1($guus_setting_part1)))).md5(sha1(md5(strtolower(base64_encode($guus_setting_part2))))));return $guus_output;}?>