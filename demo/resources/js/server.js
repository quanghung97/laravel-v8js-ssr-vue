import app from './AppSSR'

renderVueComponentToString(app, (err, res) => {
    print(res);
})
