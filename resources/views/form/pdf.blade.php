@foreach($form as $thisForm)

<h3>ID do Formulário: {{ $thisForm->id }} </h3>

<p><strong>Nome: </strong> {{$thisForm->name}}</p>
<p><strong>Email: </strong>{{$thisForm->email}}</p>
<p><strong>Telefone: </strong>{{$thisForm->phone}}</p>
<p><strong>Data de nascimento: </strong>{{$thisForm->birthday}}</p>
<p><strong>CPF: </strong>{{$thisForm->cpf}}</p>
<p><strong>Titulo de eleitor: </strong>{{$thisForm->doc_voter}}</p>
<p><strong>Cep: </strong>{{$thisForm->zipcode}}</p>
<p><strong>Endereço: </strong>{{$thisForm->address}}</p>
<p><strong>Número: </strong>{{$thisForm->number_house}}</p>
<p><strong>Complemento: </strong>{{$thisForm->complement_house ? $thisForm->complement_house  : 'não possui'}}</p>
<p><strong>Bairro: </strong>{{$thisForm->district}}</p>
<p><strong>Cidade: </strong>{{$thisForm->city}}</p>
<p><strong>Estado: </strong>{{$thisForm->state}}</p>
<p><strong>Mudou de endereço esse ano?: </strong>{{$thisForm->change_address}}</p>
<p><strong>Possui deficiência?: </strong>{{$thisForm->have_deficiency}}</p>
<p><strong>Profissão: </strong>{{$thisForm->occupation}}</p>
<p><strong>Número de registro: </strong>{{$thisForm->number_register ? $thisForm->number_register  : 'não possui' }}</p>
<p><strong>Número do ultimo IR: </strong>{{$thisForm->number_last_ir ? $thisForm->number_last_ir  : 'não possui' }}</p>
<p><strong>Possui cônjuge: </strong>{{$thisForm->haveSpouse}}</p>
<p><strong>CPF cônjuge: </strong>{{$thisForm->cpf_spouse ? $thisForm->cpf_spouse : 'não possui'}}</p>
<p><strong>Possui dependentes?: </strong>{{$thisForm->haveDependents}}</p>
<p><strong>Dados dependentes: </strong>{{$thisForm->textarea_dependents ? $thisForm->textarea_dependents : 'não possui'}}</p>
<p><strong>Possui alimentandos?: </strong>{{$thisForm->haveFed}}</p>
<p><strong>Dados alimentandos: </strong>{{$thisForm->textarea_fed ? $thisForm->textarea_fed : 'não possui'}}</p>
<p><strong>Despesas médicas?: </strong>{{$thisForm->haveMedicalExpenses}}</p>
<p><strong>Dados despesas médicas: </strong>{{$thisForm->textarea_medical_expenses ? $thisForm->textarea_medical_expenses : 'não possui'}}</p>
<p><strong>Despesas com educação/ instrução?: </strong>{{$thisForm->haveEducationExpenses}}</p>
<p><strong>Dados despesas educação: </strong>{{$thisForm->textarea_education_expenses ? $thisForm->textarea_education_expenses : 'não possui'}}</p>
<p><strong>Possui Patrimônio?: </strong>{{$thisForm->havePatrimony}}</p>
<p><strong>Dados patrimônio: </strong>{{$thisForm->textarea_patrimony ? $thisForm->textarea_patrimony : 'não possui'}}</p>
<p><strong>Banco: </strong>{{$thisForm->bank}}</p>
<p><strong>Agencia: </strong>{{$thisForm->bank_agency}}</p>
<p><strong>Número da conta: </strong>{{$thisForm->bank_number}}</p>
<p><strong>Recebeu auxílio emergencial: </strong>{{$thisForm->received_emergency_aid}}</p>



<!-- <table class="table table-hover table-danger table-striped">
    <thead class="text-center">
        <tr>
            <th scope="row">Nome</th>
            <th scope="row">Endereço</th>
        </tr>
    </thead>

    <tbody class="text-center">
        <tr>
            <td>{{ $thisForm->name }}</td>
            <td>{{ $thisForm->address }}</td>
        </tr>
    </tbody>
</table> -->




@endforeach
