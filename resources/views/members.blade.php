@extends('wordpress')

@section('content')
<h1>Member list</h1>
<table class="table">
  <tr>
    <th>ID</th>
    <th>Username</th>
  </tr>
<?php foreach ($users as $user): ?>
  <tr>
    <td><?php echo $user->ID ?></td>
    <td><?php echo $user->display_name ?></td>
  </tr>
<?php endforeach; ?>
</table>
@endsection
