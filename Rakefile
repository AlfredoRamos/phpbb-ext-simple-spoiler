# encoding: UTF-8
require 'autoprefixer-rails'

$stdout.sync = $stderr.sync = true

namespace :build do
  files = Dir.glob('styles/*/theme/css/*.css')

  desc 'Base build'
  task :base, [:opts] do |_t, args|
    unless args[:opts].key?(:output)
      args[:opts][:output] = args[:opts][:input]
    end

    if args[:opts][:output].eql?(args[:opts][:input])
      args[:opts][:output] += '.tmp'
    end

    File.open(args[:opts][:output], 'w') do |f|
      css = File.read(args[:opts][:input])

      f.puts AutoprefixerRails.process(css, {
        map: false,
        cascade: false,
        from: args[:opts][:input],
        to: args[:opts][:output],
        browsers: [
          '>= 1%',
          'last 1 major version',
          'not dead',
          'Chrome >= 45',
          'Firefox >= 38',
          'Edge >= 12',
          'Explorer >= 10',
          'iOS >= 9',
          'Safari >= 9',
          'Android >= 4.4',
          'Opera >= 30'
        ]
      }).css

      if args[:opts][:output].index(/\.tmp$/).to_i.positive?
        File.delete(args[:opts][:input])
        File.rename(args[:opts][:output], args[:opts][:input])
      end
    end
  end

  desc 'Build CSS files'
  task :css do
    files.each do |file|
      Rake::Task['build:base'].reenable
      Rake::Task['build:base'].invoke(
        input: file,
        style: :expanded
      )
    end
  end

  desc 'Build all CSS files'
  task :all do
    Rake::Task['build:css'].invoke
  end
end
