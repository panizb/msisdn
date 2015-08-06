Vagrant.configure(2) do |config|
  config.vm.box = "hashicorp/precise32"
  config.vm.synced_folder "./changes", "/vagrant/changes", create: true , type:"rsync"
end
