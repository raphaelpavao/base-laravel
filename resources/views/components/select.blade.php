@props(['disabled' => false])

<select
    {!! $attributes
        ->merge(['class' => '
            rounded-md shadow-sm
            border-gray-300
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
        '])
    !!}
>
    <option value= 1>1</option>
    <option value= 2>2</option>
    <option value= 3>3</option>
    <option value= 4>4</option>
    <option value= 5>5</option>

</select>

