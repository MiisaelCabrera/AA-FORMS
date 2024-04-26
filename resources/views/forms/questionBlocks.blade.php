<div class="question-block">

    {{-- Texto de la pregunta --}}
    <label for="">{{ $currentCategory->number . '.' . $question->number . ' ' . $question->question }}</label>

    @if ($question->hasLink)
        <a href="{{ $question->link }}" target="_blank" style="text-decoration: underline">Vea el video explicativo</a>
    @endif


    @php
        $currentAnswer = $answer->first();
    @endphp

    @if ($question->type == 'text')
        {{-- Input de tipo texto --}}
        <input type="text" name="{{ $question->name }}" id="{{ $question->name }} "
            {{ $question->required ? 'required' : '' }} {{ $question->autoAnswer ? 'disabled ' : '' }}
            value="{{ $currentAnswer && $currentAnswer->question_id === $question->id ? $currentAnswer->answer : '' }}"
            {{ $currentAnswer ? 'disabled' : '' }}>
    @elseif ($question->type == 'number')
        @php
            $currentAnswer = $answer->first();
        @endphp
        {{-- Input de tipo numero --}}
        <input type="number" step="0.1" name="{{ $question->name }}" id="{{ $question->name }}"
            {{ $question->required ? 'required' : '' }} {{ $question->autoAnswer ? 'disabled' : '' }}
            value="{{ $currentAnswer && $currentAnswer->question_id === $question->id ? $currentAnswer->answer : '' }}"
            {{ count($answer) ? 'disabled' : '' }}>
    @elseif ($question->type == 'textarea')
        {{-- Input de tipo area de texto --}}

        @php
            $currentAnswer = $answer->first();
        @endphp
        <textarea name="{{ $question->name }}" id="{{ $question->name }}" rows="5" cols="50"
            {{ $question->required ? 'required' : '' }}>{{ $currentAnswer && $currentAnswer->question_id === $question->id ? $currentAnswer->answer : '' }}</textarea>
    @elseif ($question->type == 'select')
        @php
            $currentAnswer = $answer->first();
        @endphp
        {{-- Select --}}
        <select name="{{ $question->name }}" id="{{ $question->name }}" {{ $question->required ? 'required' : '' }}>
            @foreach ($questionInputs as $option)
                <option value="{{ $option->name }}"
                    {{ $currentAnswer && $currentAnswer->question_id === $question->id && $currentAnswer->answer == $option->name ? 'selected' : '' }}>
                    {{ $option->text }}</option>
            @endforeach
        </select>
    @elseif ($question->type == 'multinumber')
        {{-- Multiples enteros --}}
        @php
            $matrix = [];
            $answerMatrix = [];
            foreach ($answer as $key => $value) {
                array_push($answerMatrix, $value->answer);
            }
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
                        {{ $question->required ? 'required' : '' }}
                        value='{{ count($answerMatrix) > 0 ? $answerMatrix[$i - 1] : '' }}'
                        {{ count($answerMatrix) > 0 ? 'disabled' : '' }}>
                @elseif ($matrix[$i][$j]->type == 'number')
                    <input type="number" name="{{ $question->name . '__' . $matrix[$i][$j]->name }}" step="0.01"
                        id="{{ $question->name . '__' . $matrix[$i][$j]->name }}"
                        {{ $question->required ? 'required' : '' }}
                        value='{{ count($answerMatrix) > 0 ? $answerMatrix[$i - 1] : '' }}'
                        {{ count($answerMatrix) > 0 ? 'disabled' : '' }}>
                @endif
            @endfor
        @endfor
    @elseif ($question->type == 'multiradio')
        {{-- Multiples radio --}}
        @php
            $matrix = [];
            $answerMatrix = [];
            foreach ($answer as $key => $value) {
                array_push($answerMatrix, $value->answer);
            }
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
                                    value="{{ $matrix[1][$j]->name }}" {{ $question->required ? 'required' : '' }}
                                    {{ count($answerMatrix) > 0 && $answerMatrix[$i - 2] === $matrix[1][$j]->name ? 'checked' : '' }}
                                    {{ count($answerMatrix) > 0 ? 'disabled' : '' }} />
                            </td>
                        @endif
                    @endfor
                </tr>
            @endfor
        </table>
    @elseif ($question->type == 'verticalradio')
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
                            <td><input type="radio" name="{{ $question->name }}" id="{{ $question->name }}"
                                    value="{{ $matrix[$i][1]->name }}" {{ $question->required ? 'required' : '' }} />
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
    @elseif ($question->type == 'dinamyctable')
        {{-- Multiples checkbox --}}

        @php
            $matrix = [];
        @endphp

        @foreach ($questionInputs as $item)
            @php
                $matrix[$item->y][$item->x] = $item;

                $answerMatrix = [];
                foreach ($answer as $key => $value) {
                    array_push($answerMatrix, [$value->answer, $value->name]);
                }

            @endphp
        @endforeach

        @for ($i = 1; $i <= count($matrix); $i++)
            <table id="{{ $question->name . '_' . $i . '_table' }}">
                <thead>
                    <tr>
                        @for ($j = 1; $j <= count($matrix[$i]); $j++)
                            <th>
                                {{ $matrix[$i][$j]->text }}
                            </th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    @if (count($answerMatrix) == 0)
                        <tr>
                            @for ($j = 1; $j <= count($matrix[$i]); $j++)
                                @php
                                    $type = 'text';
                                    if ($matrix[$i][$j]->text === 'Número de especies') {
                                        $type = 'number';
                                    }
                                @endphp
                                <td style="padding: 0%">
                                    <input type="{{ $type }}"
                                        name="{{ $question->name . '__' . $matrix[$i][$j]->name . '__1__' . $i }}"
                                        id="{{ $question->name . '__' . $matrix[$i][$j]->name . '__' . $i . '__' . $i }}"
                                        style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;"
                                        {{ $question->required ? 'required' : '' }}>
                                </td>
                            @endfor
                        </tr>
                    @else
                        @for ($k = 0; $k < intval(count($answerMatrix) / 4); $k++)
                            @if (substr($answerMatrix[$k * 4][1], -1) == $i)
                                <tr>
                                    @for ($j = 1; $j <= 4; $j++)
                                        @php
                                            $type = 'text';
                                            if ($matrix[$i][$j]->text === 'Número de especies') {
                                                $type = 'number';
                                            }
                                        @endphp
                                        <td style="padding: 0%">
                                            <input type="{{ $type }}"
                                                name="{{ $question->name . '__' . $matrix[$i][$j]->name . '__' . $k . '__' . $i }}"
                                                id="{{ $question->name . '__' . $matrix[$i][$j]->name . '__' . $k . '__' . $i }}"
                                                style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;"
                                                {{ $question->required ? 'required' : '' }}
                                                value="{{ $answerMatrix[$k * 4 + $j - 1][0] }}">
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endfor
                    @endif
                </tbody>

            </table>
            <button type="button" class="submit" id="{{ $question->name . '_' . $i }}">Añadir item</button>
        @endfor



    @endif
    @if ($question->needsEvidence)
        {{-- Input para evidencias necesarias --}}
        <input type="file" name="{{ $question->name . '_evidence' }}" id="{{ $question->name . '_evidence' }}"
            accept=".doc" {{ $question->required ? 'required' : '' }}>
    @endif
</div>

@if (auth()->user()->role != 'user' || $answer->count() > 0)
    <script>
        $(document).ready(function() {
            $('select').prop('disabled', true);
            $('.submit').addClass('disabled');
            $('textarea').prop('disabled', true);
            $('input[type="number"]').prop('disabled', true);
            $('input[type="text"]').prop('disabled', true);
            $('input[type="radio"]').prop('disabled', true);
            $('input[type="file"]').prop('disabled', true);
            $('input[type="checkbox"]').prop('disabled', true);
            $('#entity').prop('disabled', false);
        });
    </script>
@endif
