<div class="content">
    
<div class="card">
                <div class="card-header">
                    <h1 style="color: red">Notice</h1>
                </div>
                <div class="card-body">
                    <h4>Dashboard will only be Activated when these terms are true, {{auth()->user()->license == 1 ? 'License is Activated Please Bring a user to activate the dashboard': 'Please buy the license'}}
                        {{!auth()->user()->child->c_id_1 == null ? 'Good you brought someone now please pay the license fee to activate dashboard.' : 'and  bring someone. With this key '. auth()->user()->reference_key }}</h4>
                </div>
            </div>

        </div>

        </div>