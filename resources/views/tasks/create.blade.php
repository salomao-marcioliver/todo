<x-layout page="Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form method="POST" action="{{ route('task.create_action') }}">
            @csrf
            <x-form.text_input name="title" label="Título da Task" required="required"
                placeholder="Digite o título da sua tarefa" />

            <x-form.text_input type="date" name="due_date" label="Data de Realização" />

            <x-form.select_input name="category_id" label="Categoria" placeholder="Digite o título da sua tarefa">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>

            <x-form.textarea_input label="Descrição da Tarefa" name="description"
                placeholder="Digite a descrição da tarefa" />

            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa" />
        </form>
    </section>
</x-layout>
