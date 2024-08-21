from flask import Flask, render_template 
app = Flask(__name__, subdomain_matching=True)
app.config['SERVER_NAME'] = "localhost:5000"

@app.route('/init')
def init():
    return 'hallo' 
    

@app.route('/index', subdomain ='sub1') 
def practice(): 
    return render_template('index.html')

# @app.route('/', subdomain ='sub2') 
# def practice(): 
#     return render_template('cookie.php')

if __name__ == '__main__':
    # website_url = 'cookie-testing:5000'
    # app.config['SERVER_NAME'] = "localhost:5000"
    app.run(host='localhost', port=8080)