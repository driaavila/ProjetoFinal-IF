@extends('layouts.main')

@section('title', 'Informações')

@section('content')


<div class="corpo-table">
<table class="table table-bordered table-dark text-success">
        <thead>
<tr>
      <th scope="col">Tema</th>
      <th scope="col">Horários</th>
      <th scope="col">Preços</th>
</tr>

<tr>

 <td class="table-info text-success">Café</td>   
<td class="table-info text-success"> 07:00 ás 09:30</td>
<td class="table-info text-success"> R$2,50</td>
</tr>
<tr>
<td class="table-info text-success ">Almoço</td>
<td class="table-info text-success"> 11:30 ás 13:30</td>
<td class="table-info text-success">R$5,00</td>
</tr>
<tr>
<td class="table-info text-success">Jantar</td>
 <td class="table-info text-success"> 18:30 ás 20:30</td>
 <td class="table-info text-success">R$4,50</td>          
   </tr>
</table>
</div>
<center style="margin-top: 50px;">
<caption> <em> <h5> Localização</caption> </em>
<div class="video holder">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d925.8832784484568!2d-46.55933455716474!3d-21.83696302761746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c9c31ca5676ead%3A0xf28692a7a0a7e129!2sIFSULDEMINAS%20-%20CAMPUS%20PO%C3%87OS%20DE%20CALDAS!5e0!3m2!1spt-BR!2sbr!4v1619481414186!5m2!1spt-BR!2sbr" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</center>

@endsection
