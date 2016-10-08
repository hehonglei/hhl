<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>ID</td>
        <td>名称</td>
        <td>标题</td>
        <td>操作</td>
    </tr>
    {% for item in arr %}
    <tr>
        <td>{{ item.id }}</td>
        <td>{{ item.name }}</td>
        <td>{{ item.tit }}</td>
        <td><a href="/test/shan/id/{{ item.id }}">删除</a></td>
    </tr>
    {% endfor %}
</table>
</body>
</html>
