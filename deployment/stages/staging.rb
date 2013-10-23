role :db,           "staging.lasihuolto.com"
role :web,          "staging.lasihuolto.com"

set :stage,         "staging"

# Open site after deploying
after "deploy" do
    system "open http://#{branch}.#{stage}.#{domain}/"
end
