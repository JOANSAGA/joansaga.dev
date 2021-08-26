module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                negro: '#313131',
                negro2: '#181818',
                celeste: '#33A3D4',
                celeste2: '#136487',
            },
            fontFamily: {
                'sans': ['"JetBrains Mono"']
            },
            //font-family: 'JetBrains Mono', monospace;
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
