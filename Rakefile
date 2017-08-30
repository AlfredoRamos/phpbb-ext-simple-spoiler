# encoding: UTF-8
require 'rake/testtask'
require 'autoprefixer-rails'

$stdout.sync = $stderr.sync = true

namespace :build do
  desc 'Build CSS files'
  task :css do
    files = [
      'styles/prosilver/theme/css/style.css'
    ]

    files.each do |css_file|
      css = File.read(css_file)
      tmp = format('%s.tmp', css_file)

      File.open(tmp, 'w') do |f|
        f.puts AutoprefixerRails.process(css, {
          map: false,
          from: tmp,
          to: css_file,
          browsers: [
            'Chrome >= 45',
            'Firefox ESR',
            'Edge >= 12',
            'Explorer >= 10',
            'iOS >= 9',
            'Safari >= 9',
            'Android >= 4.4',
            'Opera >= 30'
          ]
        })
      end

      # Cleanup
      File.delete(css_file)
      File.rename(tmp, css_file)
    end
  end

  desc 'Build all CSS files'
  task :all do
    Rake::Task['build:css'].invoke
  end
end
