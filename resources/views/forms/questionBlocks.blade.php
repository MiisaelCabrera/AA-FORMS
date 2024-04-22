<div class="question-block">

    {{-- Texto de la pregunta --}}
    <label for="">{{ $currentCategory->number . '.' . $question->number . ' ' . $question->question }}</label>


    @if ($question->type == 'text')
        {{-- Input de tipo texto --}}
        <input type="text" name="{{ $question->name }}" id="{{ $question->name }}"
            {{ $question->required ? 'required' : '' }} {{ $question->autoAnswer ? 'disabled ' : '' }}>
    @elseif ($question->type == 'number')
        {{-- Input de tipo numero --}}
        <input type="number" step="0.1" name="{{ $question->name }}" id="{{ $question->name }}"
            {{ $question->required ? 'required' : '' }} {{ $question->autoAnswer ? 'disabled' : '' }}>
    @elseif ($question->type == 'textarea')
        {{-- Input de tipo area de texto --}}
        <textarea name="{{ $question->name }}" id="{{ $question->name }}" rows="5" cols="50"
            {{ $question->required ? 'required' : '' }}></textarea>
    @elseif ($question->type == 'select')
        {{-- Select --}}
        <select name="{{ $question->name }}" id="{{ $question->name }}" {{ $question->required ? 'required' : '' }}>
            @foreach ($questionInputs as $option)
                <option value="{{ $option->name }}">{{ $option->text }}</option>
            @endforeach
        </select>
    @elseif ($question->type == 'multinumber')
        {{-- Multiples enteros --}}
        @php
            $matrix = [];
        @endphp

        @foreach ($questionInputs as $item)
            @php
                $matrix[$item->y][$item->x] = $item;
            @endphp
        @endforeach

        @for ($i = 1; $i <= count($matrix); $i++)
            @for ($j = 1; $j <= count($matrix[$i]); $j++)
                @if ($matrix[$i][$j]->type == 'label')
                    <label for="{{ $matrix[$i][$j + 1]->name }}">{{ $matrix[$i][$j]->text }}</label>
                @elseif ($matrix[$i][$j]->type == 'integer')
                    <input type="number" name="{{ $question->name . '__' . $matrix[$i][$j]->name }}"
                        id="{{ $question->name . '__' . $matrix[$i][$j]->name }}"
                        {{ $question->required ? 'required' : '' }}>
                @elseif ($matrix[$i][$j]->type == 'number')
                    <input type="number" name="{{ $question->name . '__' . $matrix[$i][$j]->name }}" step="0.01"
                        id="{{ $question->name . '__' . $matrix[$i][$j]->name }}"
                        {{ $question->required ? 'required' : '' }}>
                @endif
            @endfor
        @endfor
    @elseif ($question->type == 'multiradio')
        {{-- Multiples radio --}}
        @php
            $matrix = [];
        @endphp

        @foreach ($questionInputs as $item)
            @php
                $matrix[$item->y][$item->x] = $item;
            @endphp
        @endforeach
        @for ($i = 2; $i <= count($matrix); $i++)
            @for ($j = count($matrix[$i]) + 1; $j <= count($matrix[1]); $j++)
                @php
                    $matrix[$i][$j] = (object) ['type' => 'radio'];
                @endphp
            @endfor
        @endfor


        <table>
            @for ($i = 1; $i <= count($matrix); $i++)
                <tr>
                    @for ($j = 1; $j <= count($matrix[$i]); $j++)
                        @if ($matrix[$i][$j]->type == 'heading')
                            <th>{{ $matrix[$i][$j]->text }}</th>
                        @elseif ($matrix[$i][$j]->type == 'radio')
                            <td><input type="radio" name="{{ $question->name . '__' . $matrix[$i][1]->name }}"
                                    id="{{ $question->name . '__' . $matrix[$i][1]->name }}"
                                    value="{{ $matrix[1][$j]->name }}" {{ $question->required ? 'required' : '' }} />
                            </td>
                        @endif
                    @endfor
                </tr>
            @endfor
        </table>
    @elseif ($question->type == 'tableinteger')
        {{-- Multiples checkbox --}}

        @php
            $matrix = [];
        @endphp

        @foreach ($questionInputs as $item)
            @php
                $matrix[$item->y][$item->x] = $item;
            @endphp
        @endforeach
        @for ($i = 2; $i <= count($matrix); $i++)
            @for ($j = 2; $j <= count($matrix[1]); $j++)
                @php
                    $matrix[$i][$j] = (object) ['type' => 'integer'];
                @endphp
            @endfor
        @endfor

        <table>
            @for ($i = 1; $i <= count($matrix); $i++)
                <tr>
                    @for ($j = 1; $j <= count($matrix[$i]); $j++)
                        @if ($matrix[$i][$j]->type == 'heading')
                            <th>{{ $matrix[$i][$j]->text }}</th>
                        @elseif ($matrix[$i][$j]->type == 'integer')
                            <td style="padding: 0%"><input type="number"
                                    name="{{ $question->name . '__' . $matrix[$i][1]->name }}"
                                    id="{{ $question->name . '__' . $matrix[$i][1]->name . '_' . $j - 1 }}"
                                    style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;"
                                    {{ $question->required ? 'required' : '' }}
                                    {{ stripos($matrix[$i][1]->name, 'sumatory') === false ? '' : 'disabled' }} />
                            </td>
                        @endif
                    @endfor
                </tr>
            @endfor
        </table>
    @elseif ($question->type == 'tablecheckbox')
        {{-- Multiples checkbox --}}

        @php
            $matrix = [];
        @endphp

        @foreach ($questionInputs as $item)
            @php
                $matrix[$item->y][$item->x] = $item;
            @endphp
        @endforeach
        @for ($i = 2; $i <= count($matrix); $i++)
            @for ($j = 2; $j <= count($matrix[1]); $j++)
                @php
                    $matrix[$i][$j] = (object) ['type' => 'checkbox'];
                @endphp
            @endfor
        @endfor

        <table>
            @for ($i = 1; $i <= count($matrix); $i++)
                <tr>
                    @for ($j = 1; $j <= count($matrix[$i]); $j++)
                        @if ($matrix[$i][$j]->type == 'heading')
                            <th>{{ $matrix[$i][$j]->text }}</th>
                        @elseif ($matrix[$i][$j]->type == 'checkbox')
                            <td style="padding: 0%"><input type="checkbox" name="{{ $question->name . '_' . $i }}"
                                    id="{{ $question->name . '_' . $i }}"
                                    style="width: 80%; text-align: center; height: 100%; margin: 0; outline:none; border: 0;"
                                    value="{{ $matrix[$i][1]->name }}" />
                            </td>
                        @endif
                    @endfor
                </tr>
            @endfor
        </table>


    @endif
    @if ($question->needsEvidence)
        {{-- Input para evidencias necesarias --}}
        <input type="file" name="{{ $question->name . '_evidence' }}" id="{{ $question->name }}" accept=".doc"
            {{-- {{ $question->required ? 'required' : '' }} --}}>
    @endif
</div>
