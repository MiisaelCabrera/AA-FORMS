<div class="question-block">

    {{-- Texto de la pregunta --}}
    <label for="">
        {{ $currentCategory->number . '.' . $question->number . ' ' . $question->question }}
    </label>

    @if ($question->hasLink)
        {{-- Link a video explicativo --}}
        <a 
            href="{{ $question->link }}" 
            target="_blank" 
            style="text-decoration: underline">
                Vea el video explicativo
        </a>

    @endif


    @php
        $currentAnswer = $answer->first();
    @endphp

    @if ($question->type == 'text')
        {{-- Input de tipo texto --}}
        <input 
            type="text" 
            name="{{ $question->name }}" 
            id="{{ $question->name }} " {{--  {{ $question->required ? 'required' : '' }} --}}
            {{ $question->autoAnswer ? 'disabled ' : '' }}
            class="{{ $question->required ? 'required' : '' }}"
            value="{{ $currentAnswer && $currentAnswer->question_id === $question->id ? $currentAnswer->answer : '' }}">


    @elseif ($question->type == 'number')
        {{-- Input de tipo numero --}}
    
        @php
            $currentAnswer = $answer->first();
        @endphp
        <input 
            type="number" 
            step="0.1" 
            name="{{ $question->name }}" 
            id="{{ $question->name }}"
            {{-- {{ $question->required ? 'required' : '' }}  --}}
            {{ $question->autoAnswer ? 'disabled' : '' }}
            class="{{ $question->required ? 'required' : '' }}"
            value="{{ $currentAnswer && $currentAnswer->question_id === $question->id ? $currentAnswer->answer : '' }}">

    @elseif ($question->type == 'textarea')
        {{-- Input de tipo area de texto --}}

        @php
            $currentAnswer = $answer->first();
        @endphp

        <textarea 
            name="{{ $question->name }}" 
            id="{{ $question->name }}" 
            rows="5" 
            cols="50" 
            {{--  {{ $question->required ? 'required' : '' }} --}}
            class="{{ $question->required ? 'required' : '' }}"
            >
                {{ $currentAnswer && $currentAnswer->question_id === $question->id ? $currentAnswer->answer : '' }}
            </textarea>


    @elseif ($question->type == 'select')
        {{-- Select --}}
        @php
            $currentAnswer = $answer->first();
        @endphp
        <select 
            name="{{ $question->name }}" 
            id="{{ $question->name }}" 
            {{-- {{ $question->required ? 'required' : '' }} --}}
            class="{{ $question->required ? 'required' : '' }}"
        >
            @foreach ($questionInputs as $option)
                <option 
                    value="{{ $option->name }}"
                    {{ $currentAnswer && $currentAnswer->question_id === $question->id && $currentAnswer->answer == $option->name ? 'selected' : '' }}>
                    {{ $option->text }}
                </option>
            @endforeach
        </select>


    @elseif ($question->type == 'multinumber')
        {{-- Multiples numeros --}}
        @php
            $matrix = [];
            $answerMatrix = [];
        @endphp

        @foreach ($questionInputs as $item)
            @php
                $matrix[$item->y][$item->x] = $item;
            @endphp
        @endforeach

        @php
            for ($i = 1; $i <= count($matrix); $i++) {
                for($j = 2; $j <= count($matrix[$i]); $j++){
                    foreach ($answer as $key => $value) {
                        
                        $indexes = explode('.', $value->name);
                        if ($indexes[2] === $matrix[$i][$j]->name) {
                            $answerMatrix[$i][$j] = $value->answer;
                        }
                    }
                }
                
            }

        @endphp

        @for ($i = 1; $i <= count($matrix); $i++)
            @for ($j = 1; $j <= count($matrix[$i]); $j++)
                @if ($matrix[$i][$j]->type == 'label')
                    <label >
                        {{ $matrix[$i][$j]->text }}
                    </label>

                @elseif ($matrix[$i][$j]->type == 'integer')
                    <input 
                        type="number" 
                        name="{{ $question->name . '__' . $matrix[$i][$j]->name }}"
                        id="{{ $question->name . '__' . $matrix[$i][$j]->name }}" 
                        {{-- {{ $question->required ? 'required' : '' }} --}}
                        class="{{ $question->required ? 'required' : '' }}"
                        value="{{ array_key_exists($i, $answerMatrix) && array_key_exists($j, $answerMatrix[$i]) ? $answerMatrix[$i][$j] : '' }}"
                        {{stripos($matrix[$i][$j]->text, 'Promedio') === false ? '' : 'disabled'}}
                        {{stripos($matrix[$i][$j]->text, 'Sumatoria') === false ? '' : 'disabled'}}
                        {{ $question->autoAnswer ? 'disabled ' : '' }}
                    >
                @elseif ($matrix[$i][$j]->type == 'number')
                    <input 
                        type="number" 
                        name="{{ $question->name . '__' . $matrix[$i][$j]->name }}" step="0.01"
                        id="{{ $question->name . '__' . $matrix[$i][$j]->name }}" 
                        class="{{ $question->required ? 'required' : '' }}"
                        {{-- {{ $question->required ? 'required' : '' }} --}}
                        value="{{ array_key_exists($i, $answerMatrix) && array_key_exists($j, $answerMatrix[$i]) ? $answerMatrix[$i][$j] : '' }}"
                        {{strpos($matrix[$i][$j-1]->text, 'Promedio') === false ? '' : 'disabled'}}
                        {{strpos($matrix[$i][$j-1]->text, 'Sumatoria') === false ? '' : 'disabled'}}
                        {{ $question->autoAnswer ? 'disabled ' : '' }}
                    >
                        
                @endif
            @endfor
        @endfor


    @elseif ($question->type == 'multiradio')
        {{-- Multiples radio --}}
        @php
            $matrix = [];
            $answerMatrix = [];

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

        @php
            for ($i = 2; $i <= count($matrix); $i++) {
                foreach ($answer as $key => $value) {
                    $indexes = explode('.', $value->name);
                    if ($indexes[2] === $matrix[$i][1]->name) {
                        $answerMatrix[$i - 2] = $value->answer;
                    }
                }
            }
        @endphp


        <table>
            @for ($i = 1; $i <= count($matrix); $i++)
                <tr>
                    @for ($j = 1; $j <= count($matrix[$i]); $j++)
                        @if ($matrix[$i][$j]->type == 'heading')
                            <th>
                                {{ $matrix[$i][$j]->text }}
                            </th>
                        @elseif ($matrix[$i][$j]->type == 'radio')
                            <td>
                                <input 
                                    type="radio" 
                                    name="{{ $question->name . '__' . $matrix[$i][1]->name }}"
                                    id="{{ $question->name . '__' . $matrix[$i][1]->name }}"
                                    class="{{ $question->required ? 'required' : '' }}"
                                    value="{{ $matrix[1][$j]->name }}" 
                                    {{-- {{ $question->required ? 'required' : '' }} --}}
                                    {{ array_key_exists($i - 2, $answerMatrix) && $answerMatrix[$i - 2] === $matrix[1][$j]->name ? 'checked' : '' }}
                                />
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
                            <th>
                                {{ $matrix[$i][$j]->text }}
                            </th>
                        @elseif ($matrix[$i][$j]->type == 'radio')
                            <td>
                                <input 
                                    type="radio" 
                                    name="{{ $question->name }}" 
                                    id="{{ $question->name }}"
                                    class="{{ $question->required ? 'required' : '' }}"
                                    value="{{ $matrix[$i][1]->name }}" {{-- {{ $question->required ? 'required' : '' }} --}} 
                                    {{count($answerMatrix) > 0 && $answerMatrix[0] === $matrix[$i][1]->name ? 'checked' : '' }}
                                />
                            </td>
                        @endif
                    @endfor
                </tr>
            @endfor
        </table>
        @elseif ($question->type == 'tableinteger')
        {{-- Multiples numeros --}}

        @php
            $matrix = [];
            $answerMatrix = [];
            

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
        @php
            for ($i = 2; $i <= count($matrix); $i++) {
                for ($j = 2; $j <= count($matrix[$i]); $j++) {
                    foreach ($answer as $key => $value) {
                        $indexes = explode('.', $value->name);
                        if ($matrix[$i][1]->name === $indexes[2] && $j - 1 == $indexes[3]) {
                            $answerMatrix[($i - 2) * (count($matrix[$i]) - 1) + $j - 2] = $value->answer;
                        }
                        if ($matrix[$i][1]->name === 'sumatory' && $j - 1 == $indexes[2]) {
                            $answerMatrix[($i - 2) * (count($matrix[$i]) - 1) + $j - 2] = $value->answer;
                        }
                        if ($matrix[$i][1]->name === 'promedy' && $j - 1 == $indexes[2]) {
                            $answerMatrix[($i - 2) * (count($matrix[$i]) - 1) + $j - 2] = $value->answer;
                        }
                    }
                }
            }
        @endphp

        <table>
            @for ($i = 1; $i <= count($matrix); $i++)
                <tr>
                    @for ($j = 1; $j <= count($matrix[$i]); $j++)
                        @if ($matrix[$i][$j]->type == 'heading')
                            <th>
                                {{ $matrix[$i][$j]->text }}
                            </th>
                        @elseif ($matrix[$i][$j]->type == 'integer')
                            @php
                                $arraykey = ($i - 2) * (count($matrix[$i]) - 1) + $j - 2;
                            @endphp
                            <td 
                                style="padding: 0%"
                            >
                                <input 
                                    type="number"
                                    name="{{ $question->name . '__' . $matrix[$i][1]->name . '__' . $j - 1 }}"
                                    class="{{ $question->required ? 'required' : '' }}"
                                    id="{{ $question->name . '__' . $matrix[$i][1]->name . '__' . $j - 1 }}"
                                    style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;"
                                    {{-- {{ $question->required ? 'required' : '' }} --}}
                                    {{ stripos($matrix[$i][1]->name, 'sumatory') === false ? '' : 'disabled' }}
                                    {{ stripos($matrix[$i][1]->name, 'promedy') === false ? '' : 'disabled' }}
                                    value="{{ array_key_exists($arraykey, $answerMatrix) ? $answerMatrix[$arraykey] : '' }}" 
                                />
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
            $answerMatrix = [];
            foreach ($answer as $key => $value) {
                $indexes = explode('.', $value->name);
                if (array_key_exists(2, $indexes)) {
                    $answerMatrix[$indexes[2]] = $value->answer;
                }
            }

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
                            <th>
                                {{ $matrix[$i][$j]->text }}
                            </th>
                        @elseif ($matrix[$i][$j]->type == 'checkbox')
                            <td 
                                style="padding: 0%"
                            >
                                <input 
                                    type="hidden" 
                                    name="{{ $question->name . '__' . $i }}"
                                    id="{{ $question->name . '__' . $i . '_hidden' }}" 
                                    value="0" />
                                <input 
                                    type="checkbox" 
                                    name="{{ $question->name . '__' . $i }}"
                                    class="{{ $question->required ? 'required' : '' }}"
                                    id="{{ $question->name . '__' . $i }}"
                                    style="width: 80%; text-align: center; height: 100%; margin: 0; outline:none; border: 0;"
                                    value="{{ $matrix[$i][1]->name }}"
                                    {{array_key_exists($i, $answerMatrix)  && $answerMatrix[$i] === $matrix[$i][1]->name ? 'checked' : '' }} 
                                />
                            </td>
                        @endif
                    @endfor
                </tr>
            @endfor
        </table>
        @elseif ($question->type == 'dinamyctable')
        {{-- Tabla dinámica --}}

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
                                <td 
                                    style="padding: 0%"
                                >
                                    <input 
                                        type="{{ $type }}"
                                        name="{{ $question->name . '__' . $matrix[$i][$j]->name . '__1__' . $i }}"
                                        id="{{ $question->name . '__' . $matrix[$i][$j]->name . '__' . $i . '__' . $i }}"
                                        style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;"
                                        {{-- {{ $question->required ? 'required' : '' }} --}}
                                    />
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
                                        <td 
                                            style="padding: 0%"
                                        >
                                            <input 
                                                type="{{ $type }}"
                                                name="{{ $question->name . '__' . $matrix[$i][$j]->name . '__' . $k + 1 . '__' . $i }}"
                                                id="{{ $question->name . '__' . $matrix[$i][$j]->name . '__' . $k + 1 . '__' . $i }}"
                                                style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;"
                                                {{-- {{ $question->required ? 'required' : '' }} --}} value="{{ $answerMatrix[$k * 4 + $j - 1][0] }}"
                                            />
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

    
    @elseif ($question->type == 'tableintegername')
        @php
            $matrix = [];
            foreach($questionInputs as $item){
                $matrix[$item->y][$item->x] = $item;
            }

            for($i = 2; $i < count($matrix); $i++){
                for($j = 2; $j <= count($matrix[1]); $j++){
                    $name = $matrix[1][$j]->name;
                    
                    $matrix[$i][$j] = (object)['type' => $name, 'name' => '0', 'value' => ''];
                }
            }
            
            $name = 'a';
            for($j = 2; $j <= count($matrix[1]); $j++){
                for($i = 2; $i < count($matrix); $i++){
                    $matrix[$i][$j]->name = $name;
                    foreach ($answer as $key => $value) {
                        $indexes = explode('.', $value->name);
                        if($indexes[2] === $name){
                            $matrix[$i][$j]->value = $value->answer;
                        }
                    }
                    $name++;
                    
                }
            }

        
            
        @endphp

        <h3 style="display: flex; margin:auto;">{{$matrix[0][0]->text}}</h3>
        <table>
            
                @for ($i = 1; $i < count($matrix); $i++)
                    <tr>
                        @for ($j = 1; $j <= count($matrix[$i]); $j++)
                            @if ($matrix[$i][$j]->type == 'heading')
                                <th>
                                    {{ $matrix[$i][$j]->text }}
                                </th>
                            @elseif ($matrix[$i][$j]->type == 'number')
                             
                                <td 
                                    style="padding: 0%"
                                >
                                    <input 
                                        type="number" 
                                        style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0"
                                        name="{{ $question->name . '__' . $matrix[$i][$j]->name }}"
                                        id="{{ $question->name . '__' . $matrix[$i][$j]->name  }}"
                                        value="{{$matrix[$i][$j]->value}}"
                                          class="{{ $question->required ? 'required' : '' }}"
                                          {{$matrix[$i][1]->name === 'sumatory' ? 'disabled' : ''}}    
                                    />
                                </td>
                            @elseif ($matrix[$i][$j]->type == 'name' && $matrix[$i][1]->name !== 'sumatory')
                                <td 
                                    style="padding: 0%"
                                >
                                    <input 
                                        type="text"  
                                        style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0"
                                        name="{{ $question->name . '__' . $matrix[$i][$j]->name }}"
                                        value="{{$matrix[$i][$j]->value}}"
                                        class="{{ $question->required ? 'required' : '' }}"
                                        id="{{ $question->name . '__' . $matrix[$i][$j]->name }}"
                                    />
                                </td>
                            @endif
                        @endfor
                    </tr>
                @endfor 
        </table>



    @endif
    @if ($question->needsEvidence)
        @if ($file->count() > 0)
            @foreach ($file as $item)
                <a 
                    href="{{ asset('storage/' . $item->path) }}" 
                    style="margin:10px 0px; text-decoration:underline;"
                    target="_blank">
                        Descargar evidencia
                </a>
            @endforeach
        @endif

        {{-- Input para evidencias necesarias --}}
        <input 
            type="file" 
            name="{{ $question->name . '_evidence' }}" 
            id="{{ $question->name . '_evidence' }}"
            class="{{ $question->required && $file->count() == 0 ? 'required' : '' }}"

            {{-- {{ $question->required ? 'required' : '' }} --}}
        />
    @endif
</div>

@if (auth()->user()->role == 'admin'  || $isCompleted )
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