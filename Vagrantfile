Vagrant.configure(2) do |config|
    config.vm.box = "hashicorp/precise32"
    config.vm.provision "puppet" do |puppet|
    puppet.manifests_path = "manifests"
    puppet.manifest_file = "msisdn.pp"

    puppet.module_path = "modules"
    end

    config.vm.synced_folder "./changes", "/vagrant/changes", create: true , type:"rsync"
end
