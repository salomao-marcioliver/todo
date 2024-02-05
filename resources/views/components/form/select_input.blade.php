<div class="inputArea">
    <label for="{{ $name }}">{{ $label ?? '' }}</label>
    <select name="{{ $name }}" id="{{ $name }}" required>
        <option selected disabled value="">Selecione uma opção</option>
        {{ $slot }}
    </select>
</div>
