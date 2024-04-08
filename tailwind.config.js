/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    safelist: [
        'border-all',
        'border-milan',
        'border-berlin',
        'border-london',
        'border-madrid',
        'border-paris',

        'bg-all',
        'bg-milan',
        'bg-berlin',
        'bg-london',
        'bg-madrid',
        'bg-paris',

        'after:bg-black',
        'after:bg-milan',
        'after:bg-berlin',
        'after:bg-london',
        'after:bg-madrid',
        'after:bg-paris',

        'hover:bg-all',
        'hover:bg-milan',
        'hover:bg-berlin',
        'hover:bg-london',
        'hover:bg-madrid',
        'hover:bg-paris',

        'peer-checked:bg-all',
        'peer-checked:bg-milan',
        'peer-checked:bg-berlin',
        'peer-checked:bg-london',
        'peer-checked:bg-madrid',
        'peer-checked:bg-paris',
    ],
    theme: {
        extend: {
            fontFamily: {
                body: ['"Roboto"', 'sans-serif'],
                display: ['Port Lligat Slab', 'serif']
            },
            colors: {
                'primary': '#FDA42E',

                'prussian-blue': '#002755',

                'all': '#000000',
                'milan': '#4D9CF3',
                'berlin': '#D22720',
                'london': '#626260',
                'madrid': '#E5C558',
                'paris': '#7A46A8',
            }
        },
    },
    plugins: [],
}
