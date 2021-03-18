<html>
<head>
<title>Info</title>
</head>
<body>

<pre>
User Information:

Name: {$name}
Address: {$address}
</pre>
<ul>
{foreach $names as $n}
{strip}
    <li>{$n}</li>
{/strip}
{/foreach}

{section name=index loop=$names}
<li style='background:green'>{$names[index]}</li>
{/section}
</ul>
<ul>
{foreach $dbrow as $d}
{strip}
    <li>{$d['name']}  {$d['place']}</li>
{/strip}
{/foreach}
</ul>
</body>
</html>