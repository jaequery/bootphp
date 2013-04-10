<ul>
  <?php
  echo "<PRE>";
  print_r($dogs->toArray());
  echo "</PRE>";
  ?>
    @foreach($dogs as $dog)
        <li>{{ $dog->name }}</li>
    @endforeach

{{ $test }}
</ul>
