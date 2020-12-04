'use strict';
const bcrypt = require('bcrypt')

module.exports = {
  up: async (queryInterface, Sequelize) => {
	await queryInterface.bulkInsert('users', [
		{
			name: 'Afgan',
			profession: 'Admin Micro',
			role: 'admin',
			email: 'ganafgan@gmail.com',
			password: await bcrypt.hash('rahasia123',10),
			created_at: new Date(),
			updated_at: new Date()
		},
		{
			name: 'Taufiq',
			profession: 'FrontEnd Micro',
			role: 'student',
			email: 'taufiqn@gmail.com',
			password: await bcrypt.hash('rahasia12345',10),
			created_at: new Date(),
			updated_at: new Date()
			
		}
	])
  },

  down: async (queryInterface, Sequelize) => {
	await queryInterface.bulkDelete('users', null, {});
  }
};
