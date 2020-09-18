<table id="tbl" class="table table-sm text-center bg-info table-bordered">

	@for ($i = 0; $i < 20; $i++)
      <colgroup></colgroup>
   @endfor

	<thead>
      <tr>
         <th></th>
         @for ($i = 1; $i < 21; $i++)
            <th class="text-center">{{ $i }}</th>
         @endfor
         <th></th>
      </tr>
	</thead>

	<tbody>
		<tr>
         <th>Single</th>
         @for ($i = 1; $i < 21; $i++)
            <td class="rowcolSelected"
               onmouseover="changeImage('{{ asset('_darts/single/png/' .$i . '.png') }}')"
               onmouseout="changeBack('{{ asset('_darts/other/png/0.png') }}')">{{ $i }}</td>
         @endfor
			<td class="rowcolSelected"
            onmouseover="changeImage('{{ asset('_darts/other/png/bull.png') }}')"
            onmouseout="changeBack('{{ asset('_darts/other/png/0.png') }}')">Bull</td>
      </tr>

		<tr>
			<th>Double</th>
         @for ($i = 1; $i < 21; $i++)
            <td class="rowcolSelected"
               onmouseover="changeImage('{{ asset('_darts/double/png/d' .$i . '.png') }}')"
               onmouseout="changeBack('{{ asset('_darts/other/png/0.png') }}')">{{ ($i * 2) }}</td>
         @endfor
			<td class="rowcolSelected"
            onmouseover="changeImage('{{ asset('_darts/other/png/dbull.png') }}')"
            onmouseout="changeBack('{{ asset('_darts/other/png/0.png') }}')">2x Bull</td>
		</tr>

		<tr>
			<th>Triple</th>
         @for ($i = 1; $i < 21; $i++)
            <td class="rowcolSelected"
               onmouseover="changeImage('{{ asset('_darts/triple/png/t' .$i . '.png') }}')"
               onmouseout="changeBack('{{ asset('_darts/other/png/0.png') }}')">{{ ($i * 3) }}</td>
         @endfor
			<td></td>
		</tr>
	</tbody>
</table>
